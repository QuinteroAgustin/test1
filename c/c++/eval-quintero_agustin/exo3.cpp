//Evaluation 24/02/2023
//Quintero agustin
//Exercice 3 : horloge
#include <iostream>
#include <iomanip>
using namespace std ;

int main()
{
    int compteur=0; // 14400 + 420 + 35 = 14855, 1j = 86400 total : 101255
    int jour = 0;
    int time, heures, minutes, secondes;
    while (compteur <= 14855 && jour != 1){
        time = compteur;
        heures = time/3600; // pour trouver les heures
        minutes = (time % 3600) / 60; //les minutes, % pour enlever deja les heures qui sont comptés
        secondes = time % 60;
        cout << setfill('0') << setw(2) << heures << ":" << setw(2) << minutes << ":" << setw(2) << secondes << endl; //setfil de la lib iomanip pour définir la valeur par rapport aux setw(2) qui dit que si il n'y a qu'un seul nombre, il formate
        compteur++;
        if (compteur > 86400) {
            compteur = 0; // réinitialiser le compteur à 0 après 24 heures
            jour++;
        }
    }
    return 0;
}