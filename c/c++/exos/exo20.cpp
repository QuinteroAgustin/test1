#include <iostream>
#include <string>
#include <math.h>
#include <iomanip>
using namespace std;

int main()
{
    /* Déclaration des variables */
    int nb;
    int note_max;
    int note_min;
    int nb_max = 0;
    int nb_min = 0;
    float moy = 0;
    int compteur = 0;


    // reception des données
    std::cout << "Entrez un nombre (-1 pour arreter) : " << std::endl;
    cin >> nb;

    if(nb != -1){
        note_max = nb;
        note_min = nb;
        nb_max = 1;
        nb_min = 1;
        moy += nb;
        compteur++;
    }
    while (nb != -1)
    {
        std::cout << "Entrez un nombre (-1 pour arreter) : " << std::endl;
        cin >> nb;
        if(nb != -1){
            if(nb > note_max){
                note_max = nb;
                nb_max = 1;
            }else if(nb < note_min){
                note_min = nb;
                nb_min = 1;
            }else if(nb == note_max){
                nb_max++;
            }else if(nb == note_min){
                nb_min++;
            }
            moy += nb;
            compteur++;
        }
    }

    //affichage des données
    moy = moy/compteur;
    std::cout << "Note max : " << note_max <<" attribuee : " << nb_max << " fois." << std::endl;
    std::cout << "Note min : " << note_min <<" attribuee : " << nb_min << " fois." << std::endl;
    if(moy<10 ){
        std::cout << "Moyenne des notes : " << setprecision(3) << moy <<"/20" << std::endl;
    }else{
        std::cout << "Moyenne des notes : " << setprecision(4) << moy <<"/20" << std::endl;
    }
    std::cout << "Il y a eu : " << compteur <<" notes" << std::endl;
    
    return 0;
}
