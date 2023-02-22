#include <iostream>
using namespace std ;

int swap1(int& a, int& b){
    int temp = a;
    a = b;
    b = temp;
}

int swap1(string& a, string& b){
    string temp = a;
    a = b;
    b = temp;
}


int main(){
    int a, b;
    std::cout << "Entrez un entier a : " << std::endl;
    std::cin >> a;
    std::cout << "Entrez un entier b : " << std::endl;
    std::cin >> b;
    std::cout << "Avant swap a : "<< a << " b  :  "<< b << std::endl;

    string c, d;
    std::cout << "Entrez une chaine c : " << std::endl;
    std::cin >> c;
    std::cout << "Entrez une seconde chaine d : " << std::endl;
    std::cin >> d;
    std::cout << "Avant swap c : "<< c << " d  :  "<< d << std::endl;

    swap1(a,b);
    swap1(c,d);
    std::cout << "Apres swap a : "<< a << " b  :  "<< b << std::endl;
    std::cout << "Apres swap c : "<< c << " d  :  "<< d << std::endl;
    return 0;
}