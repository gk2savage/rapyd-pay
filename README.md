# RAPYD-PAY

Reference : [Rapyd Docs](https://docs.rapyd.net/build-with-rapyd/docs/getting-started)

<p align="center">
<img src="snapshots/ss1.png"/>
</p>

### Rapyd-Pay is a minimalist payment wallet platform which allow users to store funds in their rapyd wallets, send and recieve money to other wallets, and track transaction histories.

<p align="center">
<img src="snapshots/ss10.png"/>
</p>

### NOTE: This is a submission for the ``Hackathon : Formula 0001: Rapyd Fintech Grand Prix``. This is not an actual payment wallet webapp.

## Prerequisites and Techstacks used

- PHP Framework with Composer Packages
- Bootstrap and Javascript with CSS
- MySQL Database
- Rapyd API (Rapyd Collect and Rapyd Wallet)
- Rapyd Account for Client Portal with API keys



## Getting Started

These are steps to setup and get the local environment ready for the wallet.

### Installation

1. Clone the repo on your machine
```sh
git clone https://github.com/gk2savage/rapyd-pay
```
2. Install Composer packages
```sh
composer install
```
3. Setup the MySQL database on phpmyadmin or locally with the commands in ``database_dw.sql``.


## Usage

Rapyd-Pay is a minimalist payment wallet platform which allow users to store funds in their rapyd wallets, send and recieve money to other wallets, and track transaction histories.
You can sign up and login on the rapyd-pay. New Users registering will need to fill a form to automatically register and e-wallet id for their wallet.

You can store money via Credit cards (visa, mastercard etc.). You can send money to other with their ewallet-id and all the transaction history can be seen.


This is just a basic demo for the hackathon purposes but this can be actually implemented in real-life scenarios with better security, multiple authentications, multiple ways to add money in the wallet like Bank Trasnfers which are already present in Rapyd Wallet and adding new technologies like Crypto to send money from Crypto to wallet and vice versa.
