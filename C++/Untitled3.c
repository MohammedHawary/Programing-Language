#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) {
	char myinput[] = "hello";
  size_t len_myinput;
  char myinput_2;
  uint counter;
  int local_c;
  int local_8;
  
  local_c = 0;
  counter = 0;
  while( true ) {
    len_myinput = _strlen(myinput);
    if (len_myinput <= counter) {
      _printf("Password Incorrect!\n");
      return;
    }
    myinput_2 = myinput[counter];
    sscanf(&myinput_2,"%d",&local_8);
    local_c = local_c + local_8;
    if (local_c == 0xf) break;
    counter = counter + 1;
  }
  _printf("Password OK!\n");
	return 0;
}
