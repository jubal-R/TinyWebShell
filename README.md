# Tiny Web Shell
A simple php web shell and client with an interactive console for use in CTFs, wargames, etc. The goal is to keep the web shell tiny by moving as much code as possible to the client side.  

![Geist](https://github.com/jubal-R/WebShell/blob/master/screenshot.png)

## Usage
Upload the webshell, then just run the client specifying the address of the shell and start sending commands.  
- Running The Client  
`./webshellconnect.py [url]`  
Example: `./webshellconnect.py 192.168.56.104/webshell.php`
- Sending Commands  
Enter commands into the console

## Features
- Small size
- Easy to use console
- Commands sent via accept language header
- Obfuscation

## Features to be added
File upload  
Support for additional php functions
