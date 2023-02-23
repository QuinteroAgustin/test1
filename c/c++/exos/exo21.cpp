#include <iostream>
#include <string>
#include <cmath>
#include <iomanip>
using namespace std;

int main()
{
    /* Déclaration des variables */
    float a,b,c; // Les coefficient reels de l'equation
    float x1,x2; // x1 et x2 sont les solutions de l'equation
    // La solution unique sera stockee dans x1
    float delta; // Le discriminant
    //(ax^2+ bx + c = 0)
    std::cout << "Entrez a : " << std::endl;
    cin >> a;
    std::cout << "Entrez b : " << std::endl;
    cin >> b;
    std::cout << "Entrez c : " << std::endl;
    cin >> c;

    if (a == 0)
    // On peut reprendre l'algorithme precedent
    // ou considerer que l'utilisateur du programme a fait une erreur
    cout << "Erreur ! Votre equation n'est pas du second degre." << endl;
    else
    {
        delta = b*b - 4*a*c;
        if (delta < 0)
        cout << "Aucune solution reelle." << endl;
        else
        if (delta == 0)
        {
        x1 = -b/(2*a);
        cout << "Une seule solution reelle : " << x1 << endl;
        }
        else // Cas ou delta > 0
        {
        x1 = (-b+sqrt(delta))/(2*a);
        x2 = (-b-sqrt(delta))/(2*a);
        cout << "Il y a deux solutions reelles." << endl;
        cout << "Premiere solution reelle : " << x1 << endl;
        cout << "Deuxieme solution reelle : " << x2 << endl;
        }
    }
    
    return 0;
}
