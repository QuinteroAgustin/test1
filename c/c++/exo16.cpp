#include <iostream>
#include <string>
#include <math.h>
using namespace std;

int main()
{
    /* Déclaration des variables */
    int a(0);

    // reception des données
    std::cout << "Entrez un nombre !" << std::endl;
    cin >> a;
    for(int i=1; i<=a ; i++){
        std::cout << "Le carré de " << i <<" est : " << i*i << std::endl;
    }

    //affichage des données
    
    return 0;
}
