#include <iostream>
#include <string>
#include <math.h>
using namespace std;

int main()
{
    /* Déclaration des variables */
    int a(0);
    int i(1);

    // reception des données
    std::cout << "Entrez un nombre !" << std::endl;
    cin >> a;
    while(i<=a){
        std::cout << "Le carré de " << i <<" est : " << i*i << std::endl;
        i++;
    }

    //affichage des données
    
    return 0;
}
