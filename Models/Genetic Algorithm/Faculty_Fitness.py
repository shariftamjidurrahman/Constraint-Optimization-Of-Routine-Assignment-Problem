import numpy

# Calculating the fitness value of each solution in the current population.
# The fitness function calulates the sum of products between each input and its corresponding weight.
def cal_pop_fitness_hard(equation_inputs, pop):    
    # Satisfy three hard constraints
    #if(A faculty cannot have several classes at the same time and Two faculties cannot have the same section of the same course): This type of condition check
    #    return softconstraints()
    #else:
    #    return fitness
    fitness = numpy.sum(pop*equation_inputs, axis=1)
    return fitness 

def cal_pop_fitness_soft(equation_inputs, pop):
    reward_count=0
    #Satisfy required constraints and count reward for each and every 
    #constraint satisfaction
    #if(A faculty should not have two consecutive class):
    #    reward_count++
    #if(A faculty should not have more than three classes in a single day):
    #    reward_count++
    #if(A faculty should not have more than two classes and a lab in a single day):
    #    reward_count++
    #if(A faculty should not have more than one class and two labs in a single day):
    #    reward_count++
    #if(A faculty should not have two consecutive laboratory classes):
    #    reward_count++
    #if(A faculty should not take less than ten credit of courses in a single semester):
    #    reward_count++
    #if(A faculty should not take more than fourteen credit of courses in a single semester):
    #    reward_count++
    #if(A faculty has to join four day at work in a week):
    #    reward_count++
    return 