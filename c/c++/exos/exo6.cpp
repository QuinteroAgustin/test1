#include <iostream>
#include <string>
using namespace std;

int main()
{
    /* Déclaration des variables */
    string nom("");
    string prenom("");
    int age(0);

    // reception des données
    std::cout << "Quel est votre âge ?" << std::endl;
    cin >> age;
    std::cout << "Quel est votre nom & prenom  ?" << std::endl;
    cin.ignore();
    getline(cin,nom);
    
    
    string& nomRef(nom);
    int& ageRef(age);


    //affichage des données
    std::cout << "Vous vous appelez " << nomRef << " et vous avez " << ageRef << " ans." << std::endl;
    return 0;
}
