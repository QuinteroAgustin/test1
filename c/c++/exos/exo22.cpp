#include <iostream>
#include <string>
#include <cmath>
#include <iomanip>
using namespace std;

int main()
{
    /* Déclaration des variables */
    int x,y;
    string symb;
    std::cout << "Entrez le nb de lignes : " << std::endl;
    cin >> x;
    std::cout << "Entrez le nb de colonnes : " << std::endl;
    cin >> y;
    std::cout << "Entrez le symbole : " << std::endl;
    cin >> symb;

    for(int i = 0 ; i<x; i++){
        for(int j = 0 ; j<y; j++){
            std::cout << symb;
        }
        std::cout << std::endl;
    }
    
    return 0;
}
