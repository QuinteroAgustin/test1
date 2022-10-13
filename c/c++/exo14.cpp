#include <iostream>
#include <string>
using namespace std;

int main()
{
    /* Déclaration des variables */
    int a(0);
    int b(0);
    int temp(0);

    // reception des données
    std::cout << "A : " << std::endl;
    cin >> a;
    std::cout << "B : " << std::endl;
    cin >> b;

    //affichage des données
    std::cout << "A : "<< a << " et B : " << b << std::endl;
    temp = a;
    a = b;
    b = temp;
    std::cout << "A : "<< a << " et B : " << b << std::endl;
    
    return 0;
}
