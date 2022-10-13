#include <iostream>
#include <string>
using namespace std;

int main()
{
    /* Déclaration des variables */
    string result("");
    int a(0);
    int b(0);

    // reception des données
    std::cout << "entrez A : " << std::endl;
    cin >> a;
    result = to_string(a);
    std::cout << "entrez B : " << std::endl;
    cin >> b;
    a*=b;
    result = result + "*" + to_string(b);
    std::cout << "entrez C : " << std::endl;
    cin >> b;
    a+=b;
    result = result + "+" + to_string(b);
    std::cout << "entrez D : " << std::endl;
    cin >> b;
    a-=b;
    result = result + "-" + to_string(b);
    //affichage des données
    std::cout << result << " = " << a << std::endl;
    return 0;
}
