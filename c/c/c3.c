// gcc -Wall -o program test.c
#include <stdio.h>

int main(void) {
  int nb=0;
  int popAlp = 10000000;
  double popBet = 5000000;

  while (popBet < popAlp){
    popAlp += 500000;
    popBet += popBet*1.03;
    nb += 1;
  }
  printf("Il faut %d années\n", nb);

  return 0;
}
