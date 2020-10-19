/*
 ============================================================================
 Name        : c-testing.c
 Author      : 
 Version     :
 Copyright   : Your copyright notice
 Description : Hello World in C, Ansi-style
 ============================================================================
 */

#define HELO 5
//#include "iostream"
//#include "string"
//#include <math.h>
//#include <conio.h>
#include <string.h>

#include <stdio.h>
#include <stdlib.h>
int myfunction(int *n);

int myfunction(int *n) {
    puts("Has llamado a myfunction");
    printf("El valor de n es: %d\n", *n);
    (*n)++;
    return 0;   
}

int main(void) {
    char str[] = "Hola??";
    char *str2 = "Jijiji";
    int n = 7, nn = 5;
    if (n == 7) {
        puts("N vale 7");
        
    }
    myfunction(&n);
    printf("Valor de n: %d\n", n);
    printf("El valor de n es: %d\n", n);
    printf("El valor de str es: %s\n", str);
    printf("El valor de str2 es: %s\n", str2);
    printf("HELO %d\n", HELO);
    return 1; //return EXIT_SUCCESS;
}

