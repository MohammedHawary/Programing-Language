import termcolor
import pyfiglet
import os
import sys
import pathlib
from datetime import date
from time import strftime

os.system('cls')
Logo = pyfiglet.figlet_format("                       Hawary")
print(termcolor.colored(Logo, 'red'))
while True:
    command = input(termcolor.colored("Usage >> ", 'green'))
    new_command = command.split()
    if command == "":
        continue
    if command.lower() == "help":
        print(termcolor.colored('ls            print lest of directories', 'green'))
        print(termcolor.colored('cd            change directory', 'green'))
        print(termcolor.colored('pwd           print current path', 'green'))
        print(termcolor.colored('help          display help menu', 'green'))
    elif command.lower() == "pwd":
        print(pathlib.Path(__file__).parent.resolve())
    elif command.lower() == 'exit':
        exit()
    elif command.lower() == 'cls' or command.lower() == 'clear':
        os.system('cls')
        print(termcolor.colored(Logo, 'red'))
    elif new_command[0].lower() == "cd":
        try:
            os.system(f'cd {new_command[1]}')
        except:
            print(ValueError)
    elif command.lower() == 'date':
        print(date.today(), end=" ")
        print((strftime("%H:%M:%S")))
    elif command.lower() == "pes17":
        os.system('C:\Pro// Evolution// Soccer// 2017\PES2017.exe')
    else:
        try:
            os.system(command)
        except:
            print(ValueError)
