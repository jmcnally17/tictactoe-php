# Tic-Tac-Toe <img src="./images/tictactoe.png" width=60>

This project is a recreation of the game tic-tac-toe in PHP that can be run in the terminal.

## Getting Started

This program uses [Composer](https://getcomposer.org/) as a package manager. So, if you haven't already, install it via Homebrew by entering

```
brew install composer
```

into your terminal. This will also install PHP for you. Homebrew can be installed on MacOS using the instructions found [here](https://brew.sh/).

## How To Use

Simply run

```
composer play
```

while in the [main](https://github.com/jmcnally17/tictactoe-php) directory.

## Testing

Tests have been written using [PHPUnit](https://phpunit.de/). If you want to run the tests, the dependencies in [composer.json](https://github.com/jmcnally17/tictactoe-php/blob/main/composer.json) need to be installed first by entering

```
composer update
```

into your terminal. Then, run the tests by entering

```
composer test
```

while in the [main](https://github.com/jmcnally17/tictactoe-php) directory.
