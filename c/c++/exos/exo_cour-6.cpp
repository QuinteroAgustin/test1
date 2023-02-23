#include <iostream>

int multiple2(int a){
    if(a%2==0){
        return 1;
    }
    return 0;
}
int multiple3(int a){
    if(a%3==0){
        return 1;
    }
    return 0;
}

int multiple5(int a){
    if(a%5==0){
        return 1;
    }
    return 0;
}

int multiple6(int a){
    if(a%6==0){
        return 1;
    }
    return 0;
}

int multiple10(int a){
    if(a%10==0){
        return 1;
    }
    return 0;
}

int main(void){
    int a;
    std::cout << "Entrez un entier : " << std::endl;
    std::cin >> a;

    if(multiple2(a) == 1){
        std::cout << "Il est pair" << std::endl;
    }
    if(multiple3(a) == 1){
        std::cout << "Il est multiple de " << 3 << std::endl;
    }
    if(multiple5(a) == 1){
        std::cout << "Il est multiple de " << 5 << std::endl;
    }
    if(multiple6(a) == 1){
        std::cout << "Il est divisible par " << 6 << std::endl;
    }
    if(multiple10(a) == 1){
        std::cout << "Il est divisible par " << 10 << std::endl;
    }

    return 0;
}