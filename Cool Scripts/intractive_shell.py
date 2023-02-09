try:
	import pyautogui as x	
except:
	import os
	install = input("	The pyautogui Module did't installed would you want install it(Y,N):");
	if install.upper() == "Y":
		os.system("pip install pyautogui")
		print("		rerun it now")
		exit(0)

import sys

if len(sys.argv) < 2:
	print("usage : python intractive_shell.py time(s)")

try:
	is_number = int(sys.argv[1])
except:
	print("usage : python intractive_shell.py time(s)")
	exit(0)

x.sleep(is_number)
x.write("python -c 'import pty;pty.spawn(\"/bin/bash\")'\n")
x.write("export TERM=xterm\n")
x.hotkey("ctrl","z")
x.write("stty raw -echo; fg\n")
x.write("fg\n")