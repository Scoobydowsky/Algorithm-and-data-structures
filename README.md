# Algorithm-and-data-structures
Task from university created in php language

Task are wrote in Polish(PL) and English language

# TASK 1
**PL**
>Stwórz program obliczania sumy kolejnych liczb całkowitych od a do b, gdzie a = 1 b = n.   a jest wartością z góry zdefiniowaną i wynosi 1. Wartość b jest wprowadzana przez użytkownika.

**EN**

>Create program to calculate sums consecutive integers from a to b, where a = 1 b = n. a is declared and is equal 1 . b is write by user
# TASK 2
**PL**
>1. Stwórz program obliczania wartości silni.
>
> Silnia (n!) to iloczyn n kolejnych liczb naturalnych, przy czym dodatkowo zachodzi 0!=1.
> Obliczanie silni jest sztandarowym przykładem używania rekurencji: n!=n*(n‐1)!
>
>Przykład: 5!=5*4!=5*4*3!=5*4*3*2!=5*4*3*2*1!=5*4*3*2*1*0!=5*4*3*2*1*1=120
>2. Dokonaj implementacji algorytmu Euklidesa.
>Euklides opracował prosty i efektywny algorytm wyznaczania NWD (największy wspólny dzielnik).
>
>Dla danych dwóch liczb a i b polega on na odejmowaniu od większej mniejszej.
> 
>Gdy liczby są  równe otrzymamy NWD. max{a,b}:=max{a,b}‐min{a,b} gdzie max{a,b}, min{a,b} oznaczają  odpowiednio największy i najmniejszą liczbę ze zbioru {a,b}.
>
>3. Dokonaj implementacji ciągu Fibonacciego. 
>
>Ciąg Fibonacciego wyraża się rekurencyjnym wzorem: f ( n)=f(n‐2)+f(n‐1), gdy f(1)=1 oraz f(2)=1.
> 
>Łatwo obliczyć, że: f(3)=f(1)+f(2)=1+1=2 f(4)=f(2)+f(3)=1+2=3 f(5)=f(3)+f(4)=2+3=5

**EN**

>1. Create program to calculate fractional 
> Factorial (n!) Is the product of n consecutive natural numbers, whereby additionally 0! = 1.
> Calculating Fractional is flagship example of use recursion: n!=n*(n-1)!
> Example: 5! = 5*4!= 5*4*3!= 5*4*3*2!= 5*4*3*2*1!= 5*4*3*2*1*0!= 5*4*3*2*1*1=120

>2.Make the implementation of the Euclidean algorithm.
> Euclid developed a simple and effective algorithm for determining the GCD (Greatest Common Divisor).
>
> For given two numbers a and b it consists in subtracting from the greater the lesser.
>
> When the numbers are equal we get GCD. max {a, b}: = max {a, b} -min {a, b} where max {a, b}, min {a, b} are respectively the largest and the smallest number from the set {a, b}.
>
>3. Make the implementation of the Fibonacci sequence.
>
> The Fibonacci sequence is expressed by the recursive formula: f (n) = f (n-2) + f (n-1), when f (1) = 1 and f (2) = 1.
>
> It's easy to calculate that: f (3) = f (1) + f (2) = 1 + 1 = 2 f (4) = f (2) + f (3) = 1 + 2 = 3 f (5) = f (3) + f (4) = 2 + 3 = 5
# TASK 3 
**PL**
>Napisz program do obliczania tygodniowego zarobku pracownika na podstawie liczby przepracowanych godzin.
Wynagrodzenie podstawowe jest iloczynem liczby godzin LG i stawki godzinowej SG. Dla liczby godzin powyżej 40 należy doliczyć wynagrodzenie dodatkowe zakładając współczynnik 2. W wyniku podać liczbę godzin przepracowanych LG oraz obliczoną płacę PL.

>Opcja do wyboru przez użytkownika:

>Dla obliczonej pensji wyliczyć roczne wynagrodzenie i podatek.

>Zarobki w kwocie do 1360 podlegają stawce podatkowej w wysokości 0%.

>Zarobki w kwocie od 1361-do 85 528 podlegają stawce podatkowej w wysokości 17%.

>Zarobki w kwocie powyżej 85 528 podlegają stawce podatkowej w wysokości 32%.

>W wyniku podaj roczne zarobki, stawkę podatkową, obliczony podatek i wynagrodzenie po potrąceniu podatku

**EN**
> Write a program to calculate an employee's weekly earnings based on the number of hours worked.
The basic salary is the product of the number of hours LG and the hourly wage SG. For the number of hours over 40, additional remuneration should be added assuming a factor of 2. As a result, enter the number of hours worked LG and the calculated remuneration PL.

> User selectable option:

> For the calculated salary, calculate the annual salary and tax.

> Earnings of up to 1,360 are subject to a 0% tax rate.

> Earnings between 1,361- and 85,528 are subject to a 17% tax rate.

> Earnings over 85,528 are subject to a 32% tax rate.

> As a result, enter your annual earnings, tax rate, calculated tax and wages after tax deduction
# TASK 4
**PL**
>Stworz program do obliczania :
sumy,
sumy kwadratów
średniej arytmetycznej
kolejnych liczb naturalnych od a do b.

>Wyprowadź wyniki obliczeń w sposób umożliwiający wybór użytkownika, które z wyników chce zobaczyć.
sumę
sumę kwadratów
średnią arytmetyczną
koniec programu
Użytkownik wprowadza wartości a i b z klawiatury.

>Zadbaj o spełnienie warunków początkowego i końcowego. Program działa tak długo, aż nie zostanie wybrana opcja koniec(na tych samych wprowadzonych na początku a i b).

>Obliczenia wykonujemy w momencie gdy są potrzebne a nie "na zapas"


**EN**
> Create a program to calculate:
totals,
sum of squares
arithmetic mean
consecutive natural numbers from a to b.

> Derive the results of the calculations in such a way that the user can choose which of the results he wants to see.
sum
sum of squares
arithmetic average
end of program
The user enters the values ​​of a and b from the keyboard.

> Make sure that the start and end conditions are met. The program runs until the end option (on the same entered at the beginning a and b) is selected.

> We make calculations when they are needed and not "in reserve"
# TASK 5
**PL**
>Nadaj tablicy n-elementowej, z klawiatury, wartości elementów w pętli.
Wyprowadź:

>a) wartość pierwszego elementu tej tablicy,

>b) zawartość tablicy,

>c) różnicę między ostatnim elementem a pierwszym,

>d) sumę wszystkich elementów w tablicy,

>e) dowolny wybrany przez użytkownika element.

**EN**
> Give an n-element array, from the keyboard, the values of the elements in the loop.
Bring out:

> a) value of the first element of this array,

> b) the contents of the table,

> c) the difference between the last element and the first,

> d) sum of all elements in the array,

> e) any element selected by the user.
# TASK 6
**PL**
>Napisz program do  przeszukiwania tablicy n,m elementowej dwuwymiarowej.
Zadeklaruj tablice w rozmiarze 5x5 i wpisz do niej wartości w kodzie programu.
Wartości są zapisane w kodzie, a nie wprowadzane przez użytkownika.
> 
>5,6,9,2,3
> 
>8,6,7,3,5
> 
>5,3,7,6,2
> 
>4,3,6,3,8
> 
>1,6,7,2,8,

>Przeszukiwania dokonaj sekwencyjnie na zadanym przez użytkownika obszarze:
> 
>Szukaj klucza – wynikiem są wszystkie wartości w tablicy odpowiadające kluczowi i ich indeksy. 
>

**EN**
> Write a program to search an n, m two-dimensional element array.
Declare arrays of 5x5 size and enter values into them in the program code.
Values are stored in code, not user input.
>
> 5,6,9,2,3
>
> 8,6,7,3,5
>
> 5,3,7,6,2
>
> 4,3,6,3,8
>
> 1,6,7,2,8,

> Perform the search sequentially in the area defined by the user:
>
> Search for key - the result is all values in the array matching the key and their indexes.
# TASK 7
**PL**
>Posortuj tablice 10 elementową 
>Tablice 10 elementów zadeklaruj na sztywno w kodzie. Wartości: 10,7,13,88,55,28,8,20,7,55,

**EN**
>Sort 10 elements array
>Declare array in code : 10,7,13,88,55,28,8,20,7,55
