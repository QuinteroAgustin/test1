#include <iostream>
#include <string>
using namespace std;

int main()
{
    /* Déclaration des variables */
    int a(0);
    int b(0);

    // reception des données
    std::cout << "Longueur : " << std::endl;
    cin >> a;
    std::cout << "Largeur : " << std::endl;
    cin >> b;
    const int result = (a+b)*2;

    //affichage des données
    std::cout << "Le périmetre est de " << result<< std::endl;
    return 0;
}
