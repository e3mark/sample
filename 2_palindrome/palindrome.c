/**
 * Objective:
 * Using recursion (not a sequential loop) method call, write a function which takes in a string,
 * and return a boolean value to tell whether the word is a palindrome.
 * A palindrome is any word which reads the same when reversed. 
 *
 * For examples:
 * Input:  "abcba", Output: true 
 * Input: "abcabc", Output: false
  * Input: "pop", Output: true
  * Input: "abba", Output: true
 */

#include <stdio.h>
#include <string.h>
#include <stdbool.h>
 
bool is_palindrome(char [], int);
 
int main()
{
    char word[15];
    bool result = false;

    printf("Enter a word to check if it is a palindrome\n");
    scanf("%s", word);
    result = is_palindrome(word, 0);

    printf("%s", result ? "true\n" : "false\n");
    return 0;
}
 
bool is_palindrome(char word[], int index)
{
    int len = strlen(word) - (index + 1);
    if (word[index] == word[len]) {
        if (index + 1 == len || index == len) {
            //The entered word is a palindrome
            return true;
        }
        is_palindrome(word, index + 1);
    } else {
        //The entered word is not a palindrome
        return false;
    }
}