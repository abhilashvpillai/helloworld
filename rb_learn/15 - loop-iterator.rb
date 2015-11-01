=begin
In Ruby, curly braces ({}) are generally interchangeable with the keywords 
do (to open the block) and end (to close it). 

	next
	break
	
	loop	-	do - end
	
	
=end

i = 10

loop do
	i -=1
	next if i%2 != 0
	puts i
	break if i<0
end