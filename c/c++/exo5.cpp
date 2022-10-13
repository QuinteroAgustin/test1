#include <iostream>
#include <string>
using namespace std;

int main()
{
    /* Déclaration des variables */
    string nom("");
    int age(0);
    string& nomRef(nom);
    int& ageRef(age);

    // reception des données
    std::cout << "Quel est votre nom & prenom ?" << std::endl;
    getline(cin,nom);
    std::cout << "Quel est votre âge ?" << std::endl;
    cin >> age;
    
    

    //affichage des données
    std::cout << "Vous vous appelez " << nomRef << " et vous avez " << ageRef << " ans." << std::endl;
    return 0;
}
