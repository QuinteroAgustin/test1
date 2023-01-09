#include <stdio.h>
#include <math.h>
int main()
{  
    int valMax = 0;
    int val;
    int position;
    int i=1;
    do{
        printf("Saisir le %d nombre : \n", i);
        scanf("%d", &val);
        if(valMax < val){
            valMax = val;
            position = i;
        }
        i++;
    }while(val !=0);

    printf("La valeur max est : %d\n Cette valeur ce situe à la %d position\n", valMax, position);

    return 0;
}