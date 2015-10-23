/**
* Objective:
* Write a function that sorts a string of characters in alphabetical order to return it. 
*
* For examples: 
* Input: “acbaebfdg”
* Output: “aabbcdefg”
*/

#include <stdio.h>
#include <stdlib.h>
#include <string.h>

const char * az_sort(char []);

int main()
{
    char input[100];

    printf("Enter some text\n");
    scanf("%s", input);

    printf("%s\n", az_sort(input));

    return 0;
}

const char * az_sort(char input[])
{
    static char ch, output[100];
    int no[26] = {0}, n, c, t, x;

    n = strlen(input);

    /**
     * Store how many times characters (a to z)
     * appears in input string in array
     */
    for (c = 0; c < n; c++) {
        ch = input[c] - 'a';
        no[ch]++;
    }
    t = 0;

    /**
     * Insert characters a to z in output string
     * that many number of times as they appear
     * in input string
     */
    for (ch = 'a'; ch <= 'z'; ch++) {
        x = ch - 'a';
        for (c = 0; c < no[x]; c++) {
            output[t] = ch;
            t++;
        }
    }
    output[t] = '\0';

    return output;
}