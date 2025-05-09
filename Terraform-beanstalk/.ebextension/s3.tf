resource "aws_s3_bucket" "artifact_bucket" {
  bucket = "${var.project_name}-artifacts"
  acl    = "private"

  tags = {
    Name        = "${var.project_name}-artifacts"
    Environment = "production"
  }
}
