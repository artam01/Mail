# Laravel Project - Sending Emails with Mailtrap.io

This Laravel project provides an example of how to send emails using the Mailtrap.io email testing service. Mailtrap.io allows you to simulate the sending and receiving of emails in a testing environment, making it ideal for development and testing purposes.

## Prerequisites

Before running this Laravel project, ensure that you have the following:

1. PHP installed on your system.
2. Composer installed on your system.
3. Laravel framework installed globally.

## Getting Started

1. Clone the repository to your local machine:

```bash
git clone https://github.com/artam01/mail.git
Install project dependencies using Composer:

composer install
Configure Mailtrap.io credentials in the .env file:

Rename the .env.example file to .env.
Open the .env file and update the following lines with your Mailtrap.io credentials:
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your-mailtrap-username
MAIL_PASSWORD=your-mailtrap-password
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=your-email@example.com
MAIL_FROM_NAME="${APP_NAME}"
