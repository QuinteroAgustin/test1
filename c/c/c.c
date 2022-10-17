// gcc -Wall -o program test.c
#include <stdio.h>
int main(void) {
    int nbSupp=0, nbNotes;
    double note = 0, moy=0, nbTotal=0;
    
    printf("Saisir le nombre de notes :\n");
    scanf("%d", &nbNotes);

    double notes[nbNotes];

    for(int i=0;i<nbNotes;i++){
        printf("Saisir la note n %d :\n", i);
        scanf("%lf", &note);
        nbTotal += note;
        notes[i]=note;
    }
    moy=nbTotal/nbNotes;
    for(int i=0;i<nbNotes;i++){
        if(notes[i]>moy){
            nbSupp+=1;
        }
    }

    printf("Il y a %d notes supérieur à %.2lf\n", nbSupp, moy);
    return 0;
}
