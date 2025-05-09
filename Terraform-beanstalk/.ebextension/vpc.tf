data "aws_vpc" "selected" {
  id = var.vpc_id
}

data "aws_subnet" "public" {
  for_each = toset(var.public_subnets)
  id       = each.value
}
