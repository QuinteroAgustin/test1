#include <stdio.h>
#include <math.h>

int facto(int nb){
    int facto=1;
    for(int i=1; i<=nb;i++){
        facto = facto*i;
    }
    return facto;
}

int main()
{  
    int nbChev;
    int nbJoue;
    int x;
    int y;

    printf("Saisir le nombre de chevaux total : ");
    scanf("%d", &nbChev);
    printf("Saisir le nombre de chevaux joué : ");
    scanf("%d", &nbJoue);

    x = facto(nbChev)/facto(nbChev-nbJoue);
    y = facto(nbChev)/(facto(nbJoue)*facto(nbChev-nbJoue));

    printf("Le resultat de x : %d\n", x);
    printf("Le resultat de y : %d\n", y);

    return 0;
}