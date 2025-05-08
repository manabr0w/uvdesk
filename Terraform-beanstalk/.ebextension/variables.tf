variable "aws_region" {
    description = "AWS region"
    type = string
    default = "eu-north-1"

}

variable "project_name" {
    description = "Name of project"
    type = string
    default = "uvdesk"
  
}

variable "instance_type" {
    description = "Type of instance"
    type = string
    default = "t3.micro"
  
}

variable "environment_tier" {
    description = "Tier of environment"
    type = string
    default = "WebServer"
  
}

variable "min_amount_instance" {
    description = "Minimal amount of EC2 instances"
    type = number
    default = 1
  
}

variable "max_amount_instance" {
    description = "Maximum amount of EC2 instances"
    type = number
    default = 1

}

variable "solution_stack" {
    description = "Name and type solution stack for platform"
    type = string
    default = "64bit Amazon Linux 2023 v4.6.1 running PHP 8.4"
  
}

variable "vpc_id" {
    description = "ID of VPC"
    type = string
  
}

variable "public_subnets" {
    description = "List of public subnets"
  
}