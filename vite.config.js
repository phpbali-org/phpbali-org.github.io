import { defineConfig } from 'vite';
import { exec } from 'child_process';
import { existsSync } from 'fs';
import { normalize, resolve } from 'path';

export default ({ command }) => defineConfig({
    publicDir: 'fake_dir_so_nothing_gets_copied',
    base: command === 'serve' ? '' : '/source/assets/build/',
    build: {
        manifest: true,
        outDir: resolve(__dirname + '/source/assets/build'),
        assetsDir: '.',
        rollupOptions: {
            input: resolve(__dirname + '/source/_assets/js/main.js')
        },
    },
    server: {
        // required to load scripts from custom host
        cors: {
            origin: "*"
        },
        
        // We need a strict port to match on PHP side.
        // You can change it. But, please update it on your .env file to match the same port
        strictPort: true,
        port: 5173
    },
    plugins: [
        jigsaw()
    ]
});

function jigsaw() {
    const bin = existsSync('./vendor/bin/jigsaw') ? normalize('./vendor/bin/jigsaw') : hasbin('jigsaw', (result) => {
        if (result) return 'jigsaw';
        console.error('Could not find Jigsaw; please install it with composer.');
        process.exit(1);
    });

    const jigsaw = (env) => {
        console.log('Starting Jigsaw build');

        exec(`${bin} build -q ${env}`, (error, stdout, stderr) => {
            console.log('Completed Jigsaw build');
            error ? console.warn(`Error building Jigsaw site:\n${stderr}`) : console.log(stdout);
        });
    }

    return {
        name: 'jigsaw',
        async closeBundle() {
            console.log('Build complete. Running binary command...');
            jigsaw('production')
        },
        async handleHotUpdate({ file , server }) {
            if (file.includes('build_')) {
                return;
            }
            if (file.includes('_tmp')) {
                return;
            }

            jigsaw('local');
            server.ws.send({ type: 'full-reload', path: '*' });
        }
    }
}

function hasbin(binaryName, callback) {
    const isWindows = process.platform === 'win32';
    const command = isWindows ? `where ${binaryName}` : `which ${binaryName}`;

    exec(command, (err, stdout) => {
        if (err) {
            callback(false);
            return;
        }

        const binaryPath = stdout.trim();
        if (binaryPath) {
            // Check if the binary exists at the given path
            fs.access(binaryPath, fs.constants.X_OK, (err) => {
                callback(!err); // true if binary exists and is executable
            });
        } else {
            callback(false); // No output from the command
        }
    })
}