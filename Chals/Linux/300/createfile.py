import random
with open('Chals/Linux/300/300chal.txt', 'w') as file:
        file.write("\tPING{yoosing_y0ur_h34d}\n")
        for i in range(5000000):
                file.write(str(random.randint(5,5000000000))+'\n')