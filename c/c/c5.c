// gcc -Wall -o program test.c
#include <stdio.h>
#include <stdlib.h>

int main(void) {
  int x=0;

  for(int i=0;i<50;i++){
    int x=0;
    float nombre = 0;
    srand(time(NULL));
    nombre = (float)rand() / (float)RAND_MAX;

    switch (nombre)
    {
    case (nombre < 1/3) :
        x = x+1;
        break;
    case (nombre >= 1/3 && nombre <2/3) :
        x = x+2;
        break;
    case (nombre >= 2/3) :
        x = x-3;
        break;
    default:
        break;
    }
  }
  return 0;
}
