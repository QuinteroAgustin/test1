#include <iostream>
#include <string>
using namespace std;

int main()
{
    /* Déclaration des variables */
    int age(0);

    // reception des données
    std::cout << "Quel âge avez vous ? " << std::endl;
    cin >> age;
    //affichage des données
    std::cout << "L'année prochaine vous aurez " << ++age << " ans" << std::endl;
    return 0;
}
