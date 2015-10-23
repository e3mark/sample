/**
* Objective:
* Write a function which takes in a string as a input and outputs a string in reverse.
*
* For example: 
* Input: “abcdefg”
* Output: “gfedcba”
*/

#include <stdio.h>
#include <string.h>

const char * str_reverse(char []);

int main()
{
    char input[100];

    printf("Enter some text\n");
    scanf("%s", input);

    printf("%s\n", str_reverse(input));

    return 0;
}

const char * str_reverse(char input[])
{
    static char output[100];
    int n, c, d;

    n = strlen(input);
    for (c = n - 1, d = 0; c >= 0; c--, d++) {
        output[d] = input[c];
    }
    output[d] = '\0';

    return output;
}