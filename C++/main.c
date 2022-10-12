#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <Windows.h>
 
char password[] = "V2VsbCBkb25lISBUaGlzIGFwcGxpY2F0aW9uIHdhcyB3cml0dGVuIGluIHB1cmUgQywgYW5kIHlvdSBjcmFja2VkIGl0Lg==";

void setconsoletextcolour()
{
    HANDLE consoleHandle = GetStdHandle(STD_OUTPUT_HANDLE);
    SetConsoleTextAttribute(consoleHandle, 15);
}
 
void setupconsole()
{
    SetConsoleTitle("Crack Me");
    setconsoletextcolour();
}
 
void askforpassword()
{
    char input[97];
    printf("What's the password? ");
    scanf("%s", input);
    if (strcmp(input, password) == 0) 
    {
        printf("Nice! Well done.");
        return;
    }
    printf("Unlucky! Don't give up!");
}
 
int main()
{
    setupconsole();
    askforpassword();
    return 0;
}
