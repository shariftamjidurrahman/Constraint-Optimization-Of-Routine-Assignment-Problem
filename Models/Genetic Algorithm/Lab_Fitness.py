import numpy

# Calculating the fitness value of each solution in the current population.
# The fitness function calulates the sum of products between each input and its corresponding weight.
def cal_pop_fitness_hard(equation_inputs, pop):    
    # Satisfy three hard constraints
    #if(a==b && b==c && c==d): This type of condition check
    #    return softconstraints()
    #else:
    #    return fitness
    fitness = numpy.sum(pop*equation_inputs, axis=1)
    return fitness 

def cal_pop_fitness_soft(equation_inputs, pop):
    reward_count=0
    #Satisfy required constraints and count reward for each and every 
    #constraint satisfaction
    #if(Spl,Apl,Data structure course,Assembly,CSE 1110,Programming contest should be held in same labs):
    #    reward_count++
    #if(Ai,Pattern,Simulation,Programming contest should be held in same labs):
    #    reward_count++
    #if(OOP,Algorithm,Mobile Application development,CDIP should be held in same labs):
    #    reward_count++
    #if(CN,Cloud,OS,Compiler,Cisco should be held in same lab):
    #    reward_count++
    #if(SAD,Software,Web,Capstone,Graphics,CDIP,DBMS should be in same labs):
    #    reward_count++
    #if(Labs minimum running section : 4(Of various types of course)):
    #    reward_count++
    #if(Labs maximum running section : 7(Of various types of course)):
    #    reward_count++
    #if(4 sections of each course will be held in 4 different days of working day in a week):
    #    reward_count++
    return 