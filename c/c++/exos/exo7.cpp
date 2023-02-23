#include <iostream>
#include <string>
using namespace std;

int main()
{
    /* Déclaration des variables */
    int a(0);
    int b(0);

    // reception des données
    std::cout << "entrez A : " << std::endl;
    cin >> a;
    std::cout << "entrez B : " << std::endl;
    cin >> b;
    //affichage des données
    std::cout << a << " * " << b << " = " << a*b << std::endl;
    return 0;
}
