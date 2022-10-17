// gcc -Wall -o program test.c
#include <stdio.h>

int main(void) {
  int compte=0;
  int age=0;

  printf("Entrez l'age voulu : \n");
  scanf("%d", &age);

  for(int i=0;i<age;i++){
    compte += 100+(i*2);
  }

  printf("Elle aura : %d\n", compte);

  return 0;
}
