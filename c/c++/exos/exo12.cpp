#include <iostream>
#include <string>
using namespace std;

int main()
{
    /* Déclaration des variables */
    int a(0);
    int b(0);

    // reception des données
    std::cout << "A : " << std::endl;
    cin >> a;
    std::cout << "B : " << std::endl;
    cin >> b;
    const int result = a*b;

    //affichage des données
    std::cout << a << " * " << b << " = " << result<< std::endl;
    return 0;
}
