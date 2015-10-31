=begin
	.each
	.times
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