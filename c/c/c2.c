// gcc -Wall -o program test.c
#include <stdio.h>
 
void reverseNb(int nb[]){



    printf("%d", nb[2]);
}

int main(void) {
    int nb;
    printf("Entrez un nombre à inverser");
    scanf('%d', &nb);
    reverseNb(nb);
 
  return 0;
}
