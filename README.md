# PHPBali Site

This is a [PHPBali site](https://phpbali.org) build with [Jigsaw by Tighten](https://jigsaw.tighten.com).

## How to run?

1. Clone repository.
2. Install dependencies.

```bash
npm install
composer install
```

3. Run command below in each terminal.

```bash
npm run dev
vendor/bin/jigsaw serve
```

### Hard things

It takes many hours how to display data from remote collections in Jigsaw. Then, how to show each data from remote collections in a page. Thankfully, this GitHub issue: [Remote collections won't save the file in the correct folder.](https://github.com/tighten/jigsaw/issues/340) give me a hint how to solve it.