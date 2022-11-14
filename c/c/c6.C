#include <stdio.h>
int estPremier(int p){
    int premier=0;
    for (int i = 2; i < p; i++){
        if (p % i == 0){
            premier = 1;
        }
    }
    if(premier != 0){
        return true;
    }else{
        return false;
    }
}



  Écrire une fonction estpremier(p) d'argument un entier naturel p, renvoyant 1 si p est premier, et renvoyant sinon. 


#include <stdio.h>

int main (void)

{

  int i, nombre, test;

  test = 0;

  printf ("Entrez un nombre entier : ");

  if (scanf ("%d", &nombre) != 1)

    return -1;


  for (i = 2; i < nombre; i++)

    if (nombre % i == 0)

      test = 1;

  if (!test)

    printf ("%d est un nombre premier\n", nombre);

  else

    printf ("%d n'est pas un nombre premier\n", nombre);

  return 0;

}