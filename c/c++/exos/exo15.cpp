#include <iostream>
#include <string>
#include <math.h>
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
    std::cout << "a^b = " << pow(a,b) << ", sqrt("<< a <<") = " << sqrt(a) << ", sqrt("<< b <<") = " << sqrt(b) << std::endl;
    
    return 0;
}
