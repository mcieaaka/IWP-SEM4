const output = [
	[10,0.5,16,1],
  [200,0.5,16,4],
  [350,0.5,16,4],
  [600,0.5,16,5]
]

const predpt = 300;

function dist(pt){
  return Math.abs(pt-predpt);
}

const k=3
_.chain(output)
	.map(row=>[dist(row[0]),row[3]])
	.sortBy(row=>row[0])
	.slice(0,k)
	.countBy(row=>row[1])
	.toPairs()
	.sortBy(row=>row[1])
	.last()
  .first()
	.parseInt()