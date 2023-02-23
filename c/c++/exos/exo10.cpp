#include <iostream>
#include <string>
using namespace std;

int main()
{
    /* Déclaration des variables */
    string result("");
    int a(0);
    int b(0);
    int mod(0);

    // reception des données
    std::cout << "entrez A : " << std::endl;
    cin >> a;
    result = to_string(a) + " / ";
    std::cout << "entrez B : " << std::endl;
    cin >> b;
    result += to_string(b) + " = ";
    mod = a%b;
    a/=b;
    //affichage des données
    std::cout << result << a << " avec un reste de : " << mod << std::endl;
    return 0;
}
