<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: couchbase/kv/v1/kv.proto

namespace GPBMetadata\Couchbase\Kv\V1;

class Kv
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�K
couchbase/kv/v1/kv.protocouchbase.kv.v1google/protobuf/timestamp.proto"E
LegacyDurabilitySpec
num_replicated (
num_persisted ("^
MutationToken
bucket_name (	

vbucket_id (
vbucket_uuid (
seq_no ("[

GetRequest
bucket_name (	

scope_name (	
collection_name (	
key (	"z
GetResponse
content (
content_flags (
cas (*
expiry (2.google.protobuf.TimestampJJ"�
GetAndTouchRequest
bucket_name (	

scope_name (	
collection_name (	
key (	1
expiry_time (2.google.protobuf.TimestampH 
expiry_secs (H B
expiry"�
GetAndTouchResponse
content (
content_flags (
cas (*
expiry (2.google.protobuf.TimestampJJ"u
GetAndLockRequest
bucket_name (	

scope_name (	
collection_name (	
key (	
	lock_time ("�
GetAndLockResponse
content (
content_flags (
cas (*
expiry (2.google.protobuf.TimestampJJ"y
GetReplicaRequest
bucket_name (	

scope_name (	
collection_name (	
key (	
replica_index ("�
GetReplicaResponse
content (
content_flags (
cas (*
expiry (2.google.protobuf.TimestampJJ"k
UnlockRequest
bucket_name (	

scope_name (	
collection_name (	
key (	
cas ("
UnlockResponse"�
TouchRequest
bucket_name (	

scope_name (	
collection_name (	
key (	1
expiry_time (2.google.protobuf.TimestampH 
expiry_secs (H B
expiry"T
TouchResponse
cas (6
mutation_token (2.couchbase.kv.v1.MutationToken"^
ExistsRequest
bucket_name (	

scope_name (	
collection_name (	
key (	"-
ExistsResponse
result (
cas ("�
InsertRequest
bucket_name (	

scope_name (	
collection_name (	
key (	
content (
content_flags (1
expiry_time (2.google.protobuf.TimestampH 
expiry_secs
 (H ?
durability_level	 (2 .couchbase.kv.v1.DurabilityLevelH�B
expiryB
_durability_levelJ"U
InsertResponse
cas (6
mutation_token (2.couchbase.kv.v1.MutationToken"�
UpsertRequest
bucket_name (	

scope_name (	
collection_name (	
key (	
content (
content_flags (1
expiry_time (2.google.protobuf.TimestampH 
expiry_secs
 (H ?
durability_level	 (2 .couchbase.kv.v1.DurabilityLevelH�B
expiryB
_durability_levelJ"U
UpsertResponse
cas (6
mutation_token (2.couchbase.kv.v1.MutationToken"�
ReplaceRequest
bucket_name (	

scope_name (	
collection_name (	
key (	
content (
content_flags (
cas (H�1
expiry_time (2.google.protobuf.TimestampH 
expiry_secs (H ?
durability_level
 (2 .couchbase.kv.v1.DurabilityLevelH�B
expiryB
_casB
_durability_levelJ"V
ReplaceResponse
cas (6
mutation_token (2.couchbase.kv.v1.MutationToken"�
RemoveRequest
bucket_name (	

scope_name (	
collection_name (	
key (	
cas (H �?
durability_level (2 .couchbase.kv.v1.DurabilityLevelH�B
_casB
_durability_level"U
RemoveResponse
cas (6
mutation_token (2.couchbase.kv.v1.MutationToken"�
IncrementRequest
bucket_name (	

scope_name (	
collection_name (	
key (	
delta (1
expiry_time (2.google.protobuf.TimestampH 
expiry_secs
 (H 
initial (H�?
durability_level	 (2 .couchbase.kv.v1.DurabilityLevelH�B
expiryB

_initialB
_durability_level"i
IncrementResponse
cas (
content (6
mutation_token (2.couchbase.kv.v1.MutationToken"�
DecrementRequest
bucket_name (	

scope_name (	
collection_name (	
key (	
delta (1
expiry_time (2.google.protobuf.TimestampH 
expiry_secs
 (H 
initial (H�?
durability_level	 (2 .couchbase.kv.v1.DurabilityLevelH�B
expiryB

_initialB
_durability_level"i
DecrementResponse
cas (
content (6
mutation_token (2.couchbase.kv.v1.MutationToken"�
AppendRequest
bucket_name (	

scope_name (	
collection_name (	
key (	
content (
cas (H �?
durability_level (2 .couchbase.kv.v1.DurabilityLevelH�B
_casB
_durability_level"U
AppendResponse
cas (6
mutation_token (2.couchbase.kv.v1.MutationToken"�
PrependRequest
bucket_name (	

scope_name (	
collection_name (	
key (	
content (
cas (H �?
durability_level (2 .couchbase.kv.v1.DurabilityLevelH�B
_casB
_durability_level"V
PrependResponse
cas (6
mutation_token (2.couchbase.kv.v1.MutationToken"�
LookupInRequest
bucket_name (	

scope_name (	
collection_name (	
key (	4
specs (2%.couchbase.kv.v1.LookupInRequest.Spec:
flags (2&.couchbase.kv.v1.LookupInRequest.FlagsH ��
SpecB
	operation (2/.couchbase.kv.v1.LookupInRequest.Spec.Operation
path (	?
flags (2+.couchbase.kv.v1.LookupInRequest.Spec.FlagsH �%
Flags
xattr (H �B
_xattr"I
	Operation
OPERATION_GET 
OPERATION_EXISTS
OPERATION_COUNTB
_flags7
Flags
access_deleted (H �B
_access_deletedB
_flags"�
LookupInResponse5
specs (2&.couchbase.kv.v1.LookupInResponse.Spec
cas (;
Spec"
status (2.google.rpc.Status
content ("�	
MutateInRequest
bucket_name (	

scope_name (	
collection_name (	
key (	4
specs (2%.couchbase.kv.v1.MutateInRequest.SpecK
store_semantic (2..couchbase.kv.v1.MutateInRequest.StoreSemanticH�?
durability_level (2 .couchbase.kv.v1.DurabilityLevelH�
cas	 (H�:
flags
 (2&.couchbase.kv.v1.MutateInRequest.FlagsH�1
expiry_time (2.google.protobuf.TimestampH 
expiry_secs (H �
SpecB
	operation (2/.couchbase.kv.v1.MutateInRequest.Spec.Operation
path (	
content (?
flags (2+.couchbase.kv.v1.MutateInRequest.Spec.FlagsH �O
Flags
create_path (H �
xattr (H�B
_create_pathB
_xattr"�
	Operation
OPERATION_INSERT 
OPERATION_UPSERT
OPERATION_REPLACE
OPERATION_REMOVE
OPERATION_ARRAY_APPEND
OPERATION_ARRAY_PREPEND
OPERATION_ARRAY_INSERT
OPERATION_ARRAY_ADD_UNIQUE
OPERATION_COUNTERB
_flags7
Flags
access_deleted (H �B
_access_deleted"a
StoreSemantic
STORE_SEMANTIC_REPLACE 
STORE_SEMANTIC_UPSERT
STORE_SEMANTIC_INSERTB
expiryB
_store_semanticB
_durability_levelB
_casB
_flags"�
MutateInResponse5
specs (2&.couchbase.kv.v1.MutateInResponse.Spec
cas (6
mutation_token (2.couchbase.kv.v1.MutationToken(
Spec
content (H �B

_content"�
RangeScanRequest
bucket_name (	

scope_name (	
collection_name (	
key_only	 (6
range (2\'.couchbase.kv.v1.RangeScanRequest.Range<
sampling (2*.couchbase.kv.v1.RangeScanRequest.SamplingU
snapshot_requirements (26.couchbase.kv.v1.RangeScanRequest.SnapshotRequirements[
Range
	start_key (	
end_key (	
inclusive_start (
inclusive_end ()
Sampling
seed (
samples (R
SnapshotRequirements
vb_uuid (
seqno (
check_seqno_exists ("�
RangeScanResponse>
	documents (2+.couchbase.kv.v1.RangeScanResponse.Document�
Document
key (	
content (H �L
	meta_data (24.couchbase.kv.v1.RangeScanResponse.Document.MetaDataH��
MetaData
content_flags (/
expiry (2.google.protobuf.TimestampH �
seqno (
cas (B	
_expiryJJB

_contentB

_meta_data*�
DurabilityLevel
DURABILITY_LEVEL_MAJORITY 3
/DURABILITY_LEVEL_MAJORITY_AND_PERSIST_TO_ACTIVE(
$DURABILITY_LEVEL_PERSIST_TO_MAJORITY2�
	KvServiceB
Get.couchbase.kv.v1.GetRequest.couchbase.kv.v1.GetResponse" Z
GetAndTouch#.couchbase.kv.v1.GetAndTouchRequest$.couchbase.kv.v1.GetAndTouchResponse" W

GetAndLock".couchbase.kv.v1.GetAndLockRequest#.couchbase.kv.v1.GetAndLockResponse" K
Unlock.couchbase.kv.v1.UnlockRequest.couchbase.kv.v1.UnlockResponse" W

GetReplica".couchbase.kv.v1.GetReplicaRequest#.couchbase.kv.v1.GetReplicaResponse" H
Touch.couchbase.kv.v1.TouchRequest.couchbase.kv.v1.TouchResponse" K
Exists.couchbase.kv.v1.ExistsRequest.couchbase.kv.v1.ExistsResponse" K
Insert.couchbase.kv.v1.InsertRequest.couchbase.kv.v1.InsertResponse" K
Upsert.couchbase.kv.v1.UpsertRequest.couchbase.kv.v1.UpsertResponse" N
Replace.couchbase.kv.v1.ReplaceRequest .couchbase.kv.v1.ReplaceResponse" K
Remove.couchbase.kv.v1.RemoveRequest.couchbase.kv.v1.RemoveResponse" T
	Increment!.couchbase.kv.v1.IncrementRequest".couchbase.kv.v1.IncrementResponse" T
	Decrement!.couchbase.kv.v1.DecrementRequest".couchbase.kv.v1.DecrementResponse" K
Append.couchbase.kv.v1.AppendRequest.couchbase.kv.v1.AppendResponse" N
Prepend.couchbase.kv.v1.PrependRequest .couchbase.kv.v1.PrependResponse" Q
LookupIn .couchbase.kv.v1.LookupInRequest!.couchbase.kv.v1.LookupInResponse" Q
MutateIn .couchbase.kv.v1.MutateInRequest!.couchbase.kv.v1.MutateInResponse" T
	RangeScan!.couchbase.kv.v1.RangeScanRequest".couchbase.kv.v1.RangeScanResponse" B�
\'com.couchbase.client.protostellar.kv.v1PZ8github.com/couchbase/goprotostellar/genproto/kv_v1;kv_v1�&Couchbase\\Protostellar\\Generated\\KV\\V1�*Couchbase::Protostellar::Generated::KV::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

