import random
with open('Chals/Linux/400/numbers.txt', 'w') as file:
    randlist=[]
    for i in range(50_000):
        r = random.randint(521,100_000)
        if r not in randlist:
            randlist.append(r)
    
    for i in randlist:
        if (i%2)==0:
            file.write('\t')
        file.write(str(i)+'\n')