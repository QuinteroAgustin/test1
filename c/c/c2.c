// gcc -Wall -o program test.c
#include <stdio.h>
 
int reverseNb(int nb){
  int result = 0;

  while (nb!=0){
    result = result*10;
    result = result+nb%10;
    nb = nb/10;
  }
  return result;
}

int main(void) {
  int nb;
  printf("Entrez un nombre à inverser :\n");
  scanf("%d", &nb);
  nb = reverseNb(nb);
  printf("Le resultat est %d\n", nb);

  return 0;
}
