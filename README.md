<h1 align="center">
    <br>
    <a href="https://bullplanner.com">
        <img src="logo-128.png" alt="BullPlanner" width="150">
    </a>
    <br>
    BullPlanner
    <br>
</h1>

<br>

<h4 align="center">
    A powerful Open Source Appointment Scheduler that can be installed on your server. 
</h4>

<p align="center">
  <a href="#about">About</a> •
  <a href="#features">Features</a> •
  <a href="#setup">Setup</a> •
  <a href="#installation">Installation</a> •
  <a href="#license">License</a>
</p>

![screenshot](Screenshot.png)

## About

**BullPlanner** is a highly customizable web application that allows customers to book appointments with you 
via a sophisticated web interface. Moreover, it provides the ability to sync your data with Google Calendar so you can 
use them with other services. It is an open source project that you can download and install **even for commercial use**. 
BullPlanner will run smoothly with your existing website as it can be installed in a single folder of the 
server and of course share an existing database.

## Features

The application is designed to be flexible enough so that it can handle any enterprise work flow. 

* Customers and appointments management.
* Services and providers organization.
* Working plan and booking rules.
* Google Calendar synchronization.
* Email notifications system.
* Self hosted installation.
* Translated user interface.
* User community support. 

## Setup

To clone and run this application, you'll need [Git](https://git-scm.com), [Node.js](https://nodejs.org/en/download/) (which comes with [npm](http://npmjs.com)) and [Composer](https://getcomposer.org) installed on your computer. From your command line:

```bash
# Clone this repository
$ git clone https://github.com/tororivas/bullplanner.git

# Go into the repository
$ cd bullplanner

# Install dependencies
$ npm install && composer install

# Start the file watcher
$ npm start
```

Note: If you're using Linux Bash for Windows, [see this guide](https://www.howtogeek.com/261575/how-to-run-graphical-linux-desktop-applications-from-windows-10s-bash-shell/) or use `node` from the command prompt.

You can build the files by running `npm run build`. This command will bundle everything to a `build` directory.

## Installation

You will need to perform the following steps to install the application on your server:

* Make sure that your server has Apache/Nginx, PHP (8.2+) and MySQL installed.
* Create a new database (or use an existing one).
* Copy the "bullplanner" source folder on your server.
* Make sure that the "storage" directory is writable.
* Rename the "config-sample.php" file to "config.php" and update its contents based on your environment.
* Open the browser on the BullPlanner URL and follow the installation guide.

That's it! You can now use BullPlanner at your will.

You will find the latest release at [bullplanner.com](https://bullplanner.com).
You can also report problems on the [issues page](https://github.com/tororivas/bullplanner/issues)
and help the development progress.

## License 

Code Licensed Under [GPL v3.0](https://www.gnu.org/licenses/gpl-3.0.en.html) | Content Under [CC BY 3.0](https://creativecommons.org/licenses/by/3.0/)

---
credit goes to Alex Tselegidis for the base of this project

Website [alextselegidis.com](https://alextselegidis.com) &nbsp;&middot;&nbsp;
GitHub [alextselegidis](https://github.com/alextselegidis) &nbsp;&middot;&nbsp;
Twitter [@alextselegidis](https://twitter.com/AlexTselegidis)

