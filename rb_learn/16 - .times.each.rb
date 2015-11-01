=begin
	.each
	.times
	
	1..10 - from 1 to 10 including 10
	1...10 - from 1 to 10 excluding 10
=end


arr = Array(1..20)


arr.each do |x|
	if x%2==0
		print "#{x}"
end

puts
puts

arr.each do |x|
	if x%2 != 0
		x.times do
			print "odd "
		end
		puts
end